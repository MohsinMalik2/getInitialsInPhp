  public function getInitialsAttribute(){
        $firstName = explode(' ', $this->first_name);
        $lastName = explode(' ', $this->last_name);
        return mb_strtoupper(mb_substr($firstName[0], 0, 1) . mb_substr($lastName[0], 0, 1));
    }
