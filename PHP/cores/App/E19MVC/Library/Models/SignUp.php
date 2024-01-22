<?php

namespace App\E19MVC\Library\Models;

class SignUp extends Model
{

    /**
     * @param User $userModel
     * @param Invoice $invoiceModel
     */
    public function __construct(
        protected User $userModel,
        protected Invoice $invoiceModel
    ) {
        parent::__construct();
    }

    public function register(array $userInfo, array $invoiceInfo)
    {
        try {
            $this->db->beginTransaction();

            $userId = $this->userModel->create($userInfo['email'], $userInfo['name']);
            $invoiceId = $this->invoiceModel->create($invoiceInfo['amount'], $userId);

            $this->db->commit();
        } catch (\Throwable $exception) {
            if ($this->db->inTransaction()) {
                $this->db->rollBack();
            }
            throw $exception;
        }
        return $invoiceId;
    }
}