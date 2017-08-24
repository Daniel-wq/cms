<?php

namespace modules\base\system;


use modules\base\model\BaseContent;
use modules\HdProcessor;

class Processor extends HdProcessor {

    public function handle($kid){
        $this->text(BaseContent::where('bid',$kid)->pluck('content'));
    }


}