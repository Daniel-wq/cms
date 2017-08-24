<?php

namespace modules\article\system;


use modules\base\model\BaseContent;
use modules\HdProcessor;
use system\model\Article;

class Processor extends HdProcessor {
    /**
     * 处理回复消息
     *
     * @param $kid [文章主键id]
     */
    public function handle( $kid ) {
        //$articleModel = Article::fin d( $kid );
        $articleModel = Article::where([['isrecycle',0],['aid',$kid]])->first();
        $data         = [
            [
                'title'       => $articleModel['title'],
                'discription' => $articleModel['description'],
                'picurl'      => __ROOT__ . '/' . $articleModel['thumb'],
                'url'         => __WEB__ . '/a_' . $kid . '.html'
            ]
        ];
        $this->news( $data );
    }
}