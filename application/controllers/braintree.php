<?php

include APPPATH . 'third_party/braintree/lib/Braintree.php';

class braintree extends MY_Controller {

    public function __construct($sessionInit = false, $role_id = '') {
        parent::__construct($sessionInit, $role_id);
    }

    public function step1() {
        $this->data['page_title'] = SITE_TITLE . ' | Payment';
        $this->data['active_class'] = '';
        Braintree_Configuration::environment('sandbox');
        Braintree_Configuration::merchantId('8qxrnd7shhbryst4');
        Braintree_Configuration::publicKey('wh372bvg9dfyy57q');
        Braintree_Configuration::privateKey('d2553099da158f6ee2fbe72adf3726b2');
        $this->data['clientToken'] = Braintree_ClientToken::generate();
        $this->load->view('home/dropin', $this->data);
    }

    public function step2() {

        Braintree_Configuration::environment('sandbox');
        Braintree_Configuration::merchantId('8qxrnd7shhbryst4');
        Braintree_Configuration::publicKey('wh372bvg9dfyy57q');
        Braintree_Configuration::privateKey('d2553099da158f6ee2fbe72adf3726b2');

        $result = Braintree_Transaction::sale([
                    'amount' => '10.00',
                    'paymentMethodNonce' => $_POST['payment_method_nonce'],
                    'options' => [
                        'submitForSettlement' => True
                    ]
        ]);

        if ($result->success) {
            $transaction_id= $result->transaction->id;
        } else {
            print_r("Error Message: " . $result->message);
        }
    }

}
