<?php

namespace ColoredCow\LaravelAudit\Events;

trait Auditable
{ 

	protected $audit = [];

	public function setAudit($attr)
    {
        $this->audit['action'] = $attr['action'] ?? null ;
        $this->audit['ip'] = $attr['ip'] ?? null ;
        $this->audit['referer'] = $attr['referer'] ?? null ;
        $this->audit['user_id'] = $attr['user_id'] ?? null ;
        $this->audit['description'] = $attr['description'] ?? null ;
    }

    public function getAudit()
    {
    	return $this->audit;
    }

}