<?php namespace Wiler\Http\Controllers;

use Illuminate\Routing\Controller;

class PagesController extends Controller {

	//

    /**
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('pages.frontend.home');
    }

    /**
     * @return string
     */
    public function search()
    {
        return 'Search page';
    }

    /**
     * @return \Illuminate\View\View
     */
    public function listingCommercial()
    {
        return view('pages.frontend.listings.commercial');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function listingResidential()
    {
        return view('pages.frontend.listings.residential');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function resourceSimplePiti()
    {
        return view('pages.frontend.resources.simplepiti');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function resourceAdvancedPiti()
    {
        return view('pages.frontend.resources.advancedpiti');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function resourceMortgageIncome()
    {
        return view('pages.frontend.resources.mortgageincome');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function resourceMortgagePayment()
    {
        return view('pages.frontend.resources.mortgagepayment');
    }

}
