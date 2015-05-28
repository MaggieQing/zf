<?php
/**
 * Created by PhpStorm.
 * User: qing.tan
 * Date: 15-5-27
 * Time: 下午3:42
 */

namespace Album\Model;


class Album
{
    public $id;
    public $artist;
    public $title;

    public function exchangeArray($data)
    {
        $this->id     = (!empty($data['id'])) ? $data['id'] : null;
        $this->artist = (!empty($data['artist'])) ? $data['artist'] : null;
        $this->title  = (!empty($data['title'])) ? $data['title'] : null;
    }
}