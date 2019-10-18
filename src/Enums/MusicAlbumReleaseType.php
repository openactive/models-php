<?php

namespace OpenActive\Enums;

/**
 * The kind of release which this album is: single, EP or album.
 *
 */
class MusicAlbumReleaseType
{
    const AlbumRelease = \OpenActive\Enums\OA\MusicAlbumReleaseType\AlbumRelease::class;
    const EPRelease = \OpenActive\Enums\OA\MusicAlbumReleaseType\EPRelease::class;
    const BroadcastRelease = \OpenActive\Enums\OA\MusicAlbumReleaseType\BroadcastRelease::class;
    const SingleRelease = \OpenActive\Enums\OA\MusicAlbumReleaseType\SingleRelease::class;
}
