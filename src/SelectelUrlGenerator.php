<?php

namespace Spatie\MediaLibrary\UrlGenerator;

use Spatie\MediaLibrary\UrlGenerator\BaseUrlGenerator;

class SelectelUrlGenerator extends BaseUrlGenerator
{
    /**
     * Get the url for the profile of a media item.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return config('medialibrary.selectel.domain').'/'.$this->getPathRelativeToRoot();
    }
    
    /**
     * Get the temporary url for a media item.
     *
     * @param \DateTimeInterface $expiration
     * @param array $options
     *
     * @return string
     */
    public function getTemporaryUrl(DateTimeInterface $expiration, array $options = []): string
    {
        return $this
            ->filesystemManager
            ->disk($this->media->disk)
            ->temporaryUrl($this->getPath(), $expiration, $options);
    }
    
    /**
     * Get the url to the directory containing responsive images.
     *
     * @return string
     */
    public function getResponsiveImagesDirectoryUrl(): string
    {
        return config('medialibrary.selectel.domain').'/'.$this->pathGenerator->getPathForResponsiveImages($this->media);
    }
}
