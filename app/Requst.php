<?php


namespace app;


class Requst {
    private $requst_data;

    public function __construct($request) {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $this->requst_data = ['name'=>$name, 'phone'=>$phone, 'email'=>$email];
    }

    public function getRequstData() {
        return $this->requst_data;
    }
}
