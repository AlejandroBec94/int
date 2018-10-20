<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function index()
    {
        return \View::make('youtube');
    }
    public function search()
    {
        $word = Input::get('search');

        $youtube = new \Madcoda\Youtube(array('key' => 'AIzaSyDgf_GlwBTqfy2iCQy1uJlfeJ-VYn1YzGw'));

        // Parametros
        $params = array(
            'q' => $word,
            'type' => 'video',
            'part' => 'id, snippet',
            'maxResults' => 20    //Número de resultados
        );

        // Hacer la busqueda con los parametros
        $videos = $youtube->searchAdvanced($params, true);

        return \View::make('youtube.index', compact('videos'));
    }
}
