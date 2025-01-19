<?php

namespace App\Interfaces;

interface Notifications
{
    public function send(int $userId, string $type, array $data);
    public function getUserNotifications(int $userId): array;
    public function getUnreadNotifications(int $userId): array;
    public function markAsRead(int $notificationId): bool;
    public function markAllAsRead(int $userId): bool;
    public function delete(int $notificationId): bool;
    public function isRead(int $notificationId): bool;

}
