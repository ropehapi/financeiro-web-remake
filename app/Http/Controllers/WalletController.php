<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWalletRequest;
use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        $wallets = Wallet::paginate(10);

        return view("wallet.index",[
            "wallets" => $wallets
        ]);
    }

    public function create()
    {
        return view("wallet.create");
    }

    public function store(StoreWalletRequest $request)
    {
        dd(number_format((float)$request->amount,2,",","."));
        $wallet = new Wallet();
        $wallet->name = $request->name;
        $wallet->currency = $request->currency;
        $wallet->amount = (double)$request->amount;
        $wallet->type = $request->type;
        $wallet->save();

        return redirect()->route("wallets")->withStatus("Carteira cadastrada com sucesso");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function show(Wallet $wallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function edit(Wallet $wallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wallet $wallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wallet $wallet)
    {
        //
    }
}
