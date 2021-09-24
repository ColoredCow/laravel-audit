<?php

namespace ColoredCow\LaravelAudit;

use ColoredCow\LaravelAudit\Events\Auditable;
use ColoredCow\LaravelAudit\Models\ApplicationActivityAudit;

class AuditService
{
    use Auditable;

    public function make($attr)
    {
        $defaultValues = [
         'action' => 'No Action defined',
         'ip' => request()->ip(),
         'referer' => request()->headers->get('referer'),
         'user_id' => \Auth::id(),
         'description' => null,
      ];
        $attr = array_merge($defaultValues, $attr);
        $audit['action'] = $attr['action'] ?? null ;
        $audit['ip'] = $attr['ip'] ?? request()->ip() ;
        $audit['referer'] = $attr['referer'] ?? null ;
        $audit['user_id'] = $attr['user_id'] ?? \Auth::id() ;
        $audit['description'] = $attr['description'] ?? null ;
        ApplicationActivityAudit::create($audit);
    }
}
