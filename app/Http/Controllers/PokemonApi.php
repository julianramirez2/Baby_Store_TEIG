<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonApi extends Controller
{
    public function index()
    {
        $randomPokemon = rand(0, 600);
        $pokemon = HTTP::get('https://pokeapi.co/api/v2/pokemon/'.$randomPokemon);
        $json = json_decode($pokemon);
        $pokemonImg = $json->sprites->front_default;
        $pokemonName = $json->name;
        $pokemonType = $json->types[0]->type->name;
        $pokemonAbilities = $json->abilities;
        return view('user.pokemon', compact('pokemonImg', 'pokemonName', 'pokemonType', 'pokemonAbilities'));
    }
}
