<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNftRequest;
use App\Http\Requests\UpdateNftRequest;
use App\Models\Category;
use App\Models\Nft;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('Nfts/nfts-create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNftRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user_id=Auth::user()->id;

        $nft = Nft::create([
            'name' => $request['name'],
            'mint_address' => $request['mint_address'],
            'status' => $request['status'],
            'user_id' => $request['Auth::user()->id'],



        ]);

        return redirect('users-show')->with('success', __('User Successfully created!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function show(Nft $nft)
    {
        $nfts=Nft::all();
        return view('Nfts/nfts-show',compact('nfts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function edit(Nft $nft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNftRequest  $request
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNftRequest $request, Nft $nft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nft $nft,$id)
    {
        $nft = Nft::findOrFail($id);
        $nft->delete();

        return redirect('nfts-show')->with('success', 'nft is successfully deleted');
    }
}
