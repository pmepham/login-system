<?php
namespace App\Helpers;

class EncryptionHelper{

    public static function encrypt(mixed $id): string
    {
        $key = config('app.key');
        $method = config('app.cipher');
        $iv = random_bytes(openssl_cipher_iv_length(cipher_algo: $method));
        $encrypted = openssl_encrypt((string)$id, $method, $key, OPENSSL_RAW_DATA, $iv);

        // Combine IV and encrypted data, then encode
        $combined = base64_encode($iv . $encrypted);
        return rtrim(strtr($combined, '+/', '-_'), '=');
    }

    public static function decrypt(string $encryptedId): mixed
    {
        $key = config('app.key');
        $method = config('app.cipher');
        // Decode and reverse URL-safe Base64
        $data = base64_decode(strtr($encryptedId, '-_', '+/') . str_repeat('=', (4 - strlen($encryptedId) % 4) % 4));

        // Extract IV and encrypted data
        $ivLength = openssl_cipher_iv_length($method);
        $iv = substr($data, 0, $ivLength);
        $encrypted = substr($data, $ivLength);

        // Decrypt the data
        $decrypted = openssl_decrypt($encrypted, $method, $key, OPENSSL_RAW_DATA, $iv);
        return $decrypted !== false ? $decrypted : null;
    }

}

?>