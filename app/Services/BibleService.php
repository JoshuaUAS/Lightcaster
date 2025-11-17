<?php

namespace App\Services;

use App\Models\BibleVerse;
use App\Models\BibleBook;
use Illuminate\Support\Collection;

class BibleService
{
    /**
     * Get a single verse by reference
     */
    public function getVerse(string $book, int $chapter, int $verse, string $translation = 'NIV'): ?BibleVerse
    {
        return BibleVerse::where('book', $book)
            ->where('chapter', $chapter)
            ->where('verse', $verse)
            ->where('translation', $translation)
            ->first();
    }

    /**
     * Get a range of verses
     */
    public function getVerseRange(string $book, int $chapter, int $startVerse, int $endVerse, string $translation = 'NIV'): Collection
    {
        return BibleVerse::where('book', $book)
            ->where('chapter', $chapter)
            ->where('translation', $translation)
            ->whereBetween('verse', [$startVerse, $endVerse])
            ->orderBy('verse')
            ->get();
    }

    /**
     * Search verses using FULLTEXT search
     */
    public function searchVerses(string $keyword, string $translation = 'NIV', int $limit = 50): Collection
    {
        return BibleVerse::whereRaw('MATCH(text) AGAINST(? IN NATURAL LANGUAGE MODE)', [$keyword])
            ->where('translation', $translation)
            ->limit($limit)
            ->get();
    }

    /**
     * Get all books for a translation
     */
    public function getBooks(string $translation = 'NIV'): Collection
    {
        return BibleBook::orderBy('book_number')->get();
    }

    /**
     * Get chapter count for a book
     */
    public function getChapters(string $book, string $translation = 'NIV'): ?int
    {
        $bibleBook = BibleBook::where('name', $book)->first();
        return $bibleBook ? $bibleBook->chapter_count : null;
    }

    /**
     * Parse a Bible reference like "John 3:16" or "John 3:16-18"
     * Returns ['book' => 'John', 'chapter' => 3, 'start_verse' => 16, 'end_verse' => 18]
     */
    public function parseReference(string $reference): ?array
    {
        // Pattern: "Book Chapter:Verse" or "Book Chapter:Verse-Verse"
        if (preg_match('/^(.+?)\s+(\d+):(\d+)(?:-(\d+))?$/', trim($reference), $matches)) {
            return [
                'book' => trim($matches[1]),
                'chapter' => (int) $matches[2],
                'start_verse' => (int) $matches[3],
                'end_verse' => isset($matches[4]) ? (int) $matches[4] : (int) $matches[3],
            ];
        }

        return null;
    }

    /**
     * Validate if a reference exists in the database
     */
    public function validateReference(string $book, int $chapter, int $verse): bool
    {
        return BibleVerse::where('book', $book)
            ->where('chapter', $chapter)
            ->where('verse', $verse)
            ->exists();
    }

    /**
     * Format verses for display (combines multiple verses into slides)
     */
    public function formatVersesForPresentation(Collection $verses, int $versesPerSlide = 2): array
    {
        $slides = [];
        $chunks = $verses->chunk($versesPerSlide);

        foreach ($chunks as $chunk) {
            $text = $chunk->map(function ($verse) {
                return "{$verse->text} ({$verse->verse})";
            })->join(' ');

            $reference = $chunk->first()->book . ' ' .
                        $chunk->first()->chapter . ':' .
                        $chunk->first()->verse;

            if ($chunk->count() > 1) {
                $reference .= '-' . $chunk->last()->verse;
            }

            $slides[] = [
                'content' => $text,
                'reference' => $reference,
                'translation' => $chunk->first()->translation
            ];
        }

        return $slides;
    }
}
