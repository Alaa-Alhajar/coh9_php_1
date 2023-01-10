<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Model\Item;
use Core\Model\User;
use Core\Model\Transaction;
use Core\Helpers\Helper;

class Admin extends Controller
{
        public function render()
        {
                if (!empty($this->view))
                        $this->view();
        }

        function __construct()
        {
                $this->auth();
                $this->admin_view(true);
        }

        public function index()
        {
                $this->view = 'dashboard'; 
                $item = new Item; // new model items.
                $this->data['items'] = $item->get_all();
                $this->data['items_count'] = count($item->get_all());
                $this->permissions(['post:read']);
                $user = new User; // new model post.
                $this->data['users'] = $user->get_all();
                $this->data['user_count'] = count($user->get_all());
                $this->data['top']= $item->connection->query("SELECT * from items ORDER BY `items`.`price` DESC limit 5");
                $transaction = new Transaction();
                $this->data['transactions_count'] = count($transaction->get_all());



        }
}
