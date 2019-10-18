<?php

namespace OpenActive\Enums;

/**
 * Status of a game server.
 *
 */
class GameServerStatus
{
    const OfflinePermanently = \OpenActive\Enums\OA\GameServerStatus\OfflinePermanently::class;
    const OfflineTemporarily = \OpenActive\Enums\OA\GameServerStatus\OfflineTemporarily::class;
    const Online = \OpenActive\Enums\OA\GameServerStatus\Online::class;
    const OnlineFull = \OpenActive\Enums\OA\GameServerStatus\OnlineFull::class;
}
