<?php

namespace App\Services;

use App\Models\Song;
use Illuminate\Support\Facades\Session;

class PresentationService
{
    protected $sessionKey = 'presentation_state';

    /**
     * Get current presentation state
     */
    public function getState(): array
    {
        return Session::get($this->sessionKey, [
            'type' => null,
            'slides' => [],
            'currentIndex' => 0,
            'totalSlides' => 0,
            'is_cleared' => false,
        ]);
    }

    /**
     * Set presentation state
     */
    protected function setState(array $state): void
    {
        Session::put($this->sessionKey, $state);
    }

    /**
     * Get current slide
     */
    public function getCurrentSlide(): ?array
    {
        $state = $this->getState();

        if ($state['is_cleared']) {
            return [
                'content' => '',
                'background' => '#000000',
                'is_cleared' => true,
            ];
        }

        if (empty($state['slides']) || $state['currentIndex'] >= count($state['slides'])) {
            return null;
        }

        return $state['slides'][$state['currentIndex']];
    }

    /**
     * Navigate to next slide
     */
    public function nextSlide(): array
    {
        $state = $this->getState();

        if ($state['is_cleared']) {
            $state['is_cleared'] = false;
        } elseif ($state['currentIndex'] < $state['totalSlides'] - 1) {
            $state['currentIndex']++;
        }

        $this->setState($state);

        return [
            'slide' => $this->getCurrentSlide(),
            'currentIndex' => $state['currentIndex'],
            'totalSlides' => $state['totalSlides'],
        ];
    }

    /**
     * Navigate to previous slide
     */
    public function previousSlide(): array
    {
        $state = $this->getState();

        if ($state['is_cleared']) {
            $state['is_cleared'] = false;
        } elseif ($state['currentIndex'] > 0) {
            $state['currentIndex']--;
        }

        $this->setState($state);

        return [
            'slide' => $this->getCurrentSlide(),
            'currentIndex' => $state['currentIndex'],
            'totalSlides' => $state['totalSlides'],
        ];
    }

    /**
     * Jump to specific slide
     */
    public function gotoSlide(int $index): array
    {
        $state = $this->getState();

        if ($index >= 0 && $index < $state['totalSlides']) {
            $state['currentIndex'] = $index;
            $state['is_cleared'] = false;
        }

        $this->setState($state);

        return [
            'slide' => $this->getCurrentSlide(),
            'currentIndex' => $state['currentIndex'],
            'totalSlides' => $state['totalSlides'],
        ];
    }

    /**
     * Clear/blank the screen
     */
    public function clearScreen(): array
    {
        $state = $this->getState();
        $state['is_cleared'] = true;
        $this->setState($state);

        return [
            'slide' => $this->getCurrentSlide(),
            'currentIndex' => $state['currentIndex'],
            'totalSlides' => $state['totalSlides'],
            'is_cleared' => true,
        ];
    }

    /**
     * Load a song for presentation
     */
    public function loadSong(int $songId): array
    {
        $song = Song::with('background', 'theme')->findOrFail($songId);
        $slides = [];

        foreach ($song->lyrics['verses'] ?? [] as $verseData) {
            $slides[] = [
                'content' => $verseData['text'],
                'type' => $verseData['type'] ?? 'verse',
                'number' => $verseData['number'] ?? null,
                'background' => $song->background ? $song->background->file_path : null,
                'theme' => $song->theme ? $song->theme->toArray() : null,
            ];
        }

        $state = [
            'type' => 'song',
            'item_id' => $songId,
            'slides' => $slides,
            'currentIndex' => 0,
            'totalSlides' => count($slides),
            'is_cleared' => false,
        ];

        $this->setState($state);

        return [
            'slide' => $this->getCurrentSlide(),
            'currentIndex' => 0,
            'totalSlides' => count($slides),
        ];
    }

    /**
     * Load Bible verses for presentation
     */
    public function loadVerses(array $verses, string $reference = '', string $translation = 'NIV'): array
    {
        $slides = [];

        foreach ($verses as $verse) {
            $slides[] = [
                'content' => $verse['content'],
                'reference' => $verse['reference'] ?? $reference,
                'translation' => $verse['translation'] ?? $translation,
                'type' => 'verse',
                'background' => null,
                'theme' => null,
            ];
        }

        $state = [
            'type' => 'bible',
            'slides' => $slides,
            'currentIndex' => 0,
            'totalSlides' => count($slides),
            'is_cleared' => false,
        ];

        $this->setState($state);

        return [
            'slide' => $this->getCurrentSlide(),
            'currentIndex' => 0,
            'totalSlides' => count($slides),
        ];
    }

    /**
     * Clear all presentation data
     */
    public function clearPresentation(): void
    {
        Session::forget($this->sessionKey);
    }
}
