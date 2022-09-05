<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\language;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateLanguage extends Controller
{
    //

    public function language()
    {
        $language = Language::all();
        $allUser = User::all();
        $allCategories = Category::all();
        $products = Product::all();
        $contacts = Contact::all();

        return view("admin.adminLanguage", compact('language', 'allCategories', 'products', 'contacts', 'allUser'));
    }


    public function addlanguage(Request $request)
    {

        $language = Language::all();
        $allUser = User::all();
        $allCategories = Category::all();
        $products = Product::all();
        $contacts = Contact::all();

        return view("admin.addLanguage", compact('language', 'allCategories', 'products', 'contacts', 'allUser'));
    }

    public function postaddlanguage(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',


        ]);

        $lang = new Language;
        $lang->name = $request->name;
        $lang->save();
        return redirect()->back()->with('success', 'Langugage added successfully');
    }

    public function LanguageDelete($id)
    {
        $deleteProduct = Language::where('id', $id)->first();
        $deleteProduct->delete();
        return redirect()->back()->with('LangDelete', 'Lanugage  deleted succesfully');
    }


    public function LanguageEdit($id)
    {
        $language = Language::where('id', $id)->first();

        $allUser = User::all();
        $allCategories = Category::all();
        $products = Product::all();
        $contacts = Contact::all();

        return view("admin.EditLanguage", compact('language', 'allCategories', 'products', 'contacts', 'allUser'));
    }

    public function LanguageUpdate(Request $request, $id)
    {
        $language = Language::where('id', $id)->first();
        $language->name = $request->name;
        $language->save();
        return redirect()->back()->with('LangSave', 'Lanugage  Updated succesfully');
    }

    // postaddlanguage
}
