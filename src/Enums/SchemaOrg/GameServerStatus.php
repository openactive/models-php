<?php

namespace OpenActive\Enums\SchemaOrg;

/**
 * Status of a game server.
 *
 */
class GameServerStatus
{
    const OfflinePermanently = \OpenActive\Enums\SchemaOrg\GameServerStatus\OfflinePermanently::class;
    const OfflineTemporarily = \OpenActive\Enums\SchemaOrg\GameServerStatus\OfflineTemporarily::class;
    const Online = \OpenActive\Enums\SchemaOrg\GameServerStatus\Online::class;
    const OnlineFull = \OpenActive\Enums\SchemaOrg\GameServerStatus\OnlineFull::class;
}
