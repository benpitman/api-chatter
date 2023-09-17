<?php
declare(strict_types=1);

namespace App\Core\Database\Enum;

use Kentron\Support\Text;
use Kentron\Template\Enum\TEnumValues;

enum ESystemAuditType: string
{
    use TEnumValues;

    // Inbound
    case GetEncryptedText = "GET_ENCRYPTED_TEXT";
    case GetDecryptedText = "GET_DECRYPTED_TEXT";
    case GetSession = "GET_SESSION";

    // Outbound

    public static function routeIsAuthed(string $route): bool
    {
        return match(self::from($route)) {
            self::GetEncryptedText,
            self::GetDecryptedText => true,
            default => false
        };
    }

    public function toStart(): string
    {
        return Text::transform($this->value)->from(Text::HAZARD)->to(Text::START);
    }
}
