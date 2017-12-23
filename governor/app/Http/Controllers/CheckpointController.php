<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckpointController extends Controller
{

	private $data = array();
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');

        $this->data = array(
        	"leftImage" => "http://lorempixel.com/500/500",
        	"title" => "Title",
        	"description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
        );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.checkpoint', $this->data);
    }

    public function edit()
    {
    	return view('layouts.checkpoint', $this->data);
    }
}
