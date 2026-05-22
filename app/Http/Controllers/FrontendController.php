<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\CaseStudy;
use App\Models\webinar;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function home()
    {
        $banners = Banner::where('status', 'active')->latest()->get();
        $data = [];
        $data['title'] = "Global Best PR Agency with 15+ Years of Excellence";
		$data['description'] = "From behind the scenes to front-page features we elevate CXOs, corporates, and visionaries with premium PR";
		$data['keywords'] = "pr firms near me, top pr firms, pr agency near me, best pr agency in delhi ncr, pr agency in new delhi, pr agency in noida, top pr agency in noida, celebrity pr agency in mumbai";

        return view('frontend.pages.home', compact('banners','data'));
    }

    public function privacypolicy()
    {
        return view('frontend.pages.privacypolicy');
    }

    public function termsandconditions()
    {
        return view('frontend.pages.termsandconditions');
    }

    public function returnandrefund()
    {
        return view('frontend.pages.returnandrefund');
    }

    public function thankyou()
    {
        return view('frontend.pages.thankyou');
    }

    public function whoweserve()
    {
        return view('frontend.pages.whoweserve');
    }

    public function whatwedo()
    {
        return view('frontend.pages.whatwedo');
    }

    public function whymirashka()
    {
        $meta = config('why_mirashka.meta', []);
        $data = [
            'title' => $meta['title'] ?? 'Why Mirashka | HRaaS Partner',
            'description' => $meta['description'] ?? '',
            'keywords' => $meta['keywords'] ?? '',
        ];

        return view('frontend.pages.whymirashka', compact('data'));
    }

    public function cpackages()
    {
        return view('frontend.landingpage.companypackages');
    }

    public function icpackages()
    {
        return view('frontend.landingpage.indiancompanypackages');
    }

    public function cxovisibilitystarter()
    {
        return view('frontend.landingpage.cxovisibilitystarter');
    }

    public function mediacoverage()
    {
        return view('frontend.landingpage.mediacoverage');
    }

    public function casestudy()
    {
        $caseStudies = CaseStudy::where('status', 1)
            ->latest()
            ->get();

        $industries = CaseStudy::where('status', 1)
            ->select('industry')
            ->distinct()
            ->pluck('industry');

        return view('frontend.casestudies.casestudy', compact('caseStudies', 'industries'));
    }

    public function casestudysingle($slug)
    {
        $caseStudy = CaseStudy::with('media')->where('slug', $slug)->firstOrFail();

        return view('frontend.casestudies.casestudysingle', compact('caseStudy'));
    }

    public function podcast()
    {
        $podcasts = DB::table('podcast')
            ->where('status', 'active')
            ->orderBy('publish_date', 'desc')
            ->get();

        return view('frontend.podcasts.podcast', compact('podcasts'));
    }

    public function webinars()
    {
        $today = Carbon::today();

        $upcomingWebinars = Webinar::upcoming()->get();

        $pastWebinars = Webinar::past()->get();

        return view('frontend.webinars.webinars', compact('upcomingWebinars', 'pastWebinars', 'today'));
    }

    public function filterWebinars($status)
    {
        $allowedStatuses = ['upcoming', 'completed', 'cancelled'];

        abort_unless(in_array($status, $allowedStatuses, true), 404);

        $webinars = Webinar::where('status', $status)
            ->orderBy('start_date', 'asc')
            ->get();

        return view('frontend.partials.webinar-cards', compact('webinars'));
    }

    public function webinarssingle($id)
    {
        $webinar = Webinar::findOrFail($id);

        return view('frontend.webinars.webinarssingle', compact('webinar'));
    }

    public function team()
    {
        $teams = \App\Models\Team::with('social')
            ->where('status', 1)
            ->orderBy('position', 'ASC')
            ->get();

        return view('frontend.team.team', compact('teams'));
    }

    public function teamsingle($slug)
    {
        $team = \App\Models\Team::with([
            'social',
            'achievements',
            'galleries',
            'vision',
        ])->where('slug', $slug)->firstOrFail();

        return view('frontend.team.teamsingle', compact('team'));
    }

    // pages list to be linked

    public function aboutus()
    {
        return view('frontend.pages.aboutus');
    }

    public function aideeptech()
    {
        return view('frontend.pages.aideeptech');
    }

    public function awards()
    {
        return view('frontend.pages.awards');
    }

    public function awardsconsulting()
    {
        $data = [];
        $data['title'] = "Awards Consulting";
		$data['description'] = "We help founders, brands, and leaders win the right awards with strong nominations and strategies that boost reputation, authority, and trust.";
		$data['keywords'] = "online reputation management, reputation management company, online reputation management companies, best reputation management companies";
        return view('frontend.pages.awardsconsulting', compact('data'));
    }

    public function bfsifintech()
    {
        return view('frontend.pages.bfsifintech');
    }

    public function capitalmarketscommunication()
    {
        $data = [];
        $data['title'] = "Capital Markets Communication";
		$data['description'] = "We help listed and IPO-bound companies communicate with clarity, confidence, and credibility across investors, analysts, media, and stakeholders.";
		$data['keywords'] = "capital markets pr agency, capital markets pr,  pr firms near me, top pr firms, pr agency near me";
        return view('frontend.pages.capitalmarketscommunication', compact('data'));
    }

    public function client()
    {
        return view('frontend.pages.client');
    }

    

    public function voiceofleadershippodcastaudioip()
    {
        $data = [];
        $data['title'] = "Best Podcast Agencies | Build a Leadership";
		$data['description'] = "We help founders and leaders turn insights into influence, conversations into credibility, and voice into a lasting leadership asset.";
		$data['keywords'] = "podcast booking agency, best podcast agencies, podcast advertising agency, podcast marketing agency,  pr firms near me, top pr firms, pr agency near me";
        return view('frontend.pages.voiceofleadershippodcastaudioip', compact('data'));
    }

    public function strategicmediaplacements()
    {
        $data = [];
        $data['title'] = "Executive Influence & Media Authority";
		$data['description'] = "Strategic media isn’t about random mentions—it’s placing your voice where it matters most: before customers, investors, partners, and decision-makers.";
		$data['keywords'] = "influencer marketing agency, best influencer marketing platform, social media influencer agency,
pr agency near me, pr agency for small business";
        return view('frontend.pages.strategicmediaplacements', compact('data'));
    }

    public function speakingengagementsevents()
    {
        return view('frontend.pages.speakingengagementsevents');
    }

    public function reputationriskcrisispreparedness()
    {
        return view('frontend.pages.reputationriskcrisispreparedness');
    }

    public function reputationcapitalawardspositioning()
    {
        $data = [];
        $data['title'] = "Online Reputation Management | Reputation Capital";
		$data['description'] = "Third-party validation matters because markets believe credibility faster when it is externally reinforced.";
		$data['keywords'] = "online reputation management, reputation management company, online reputation";
        return view('frontend.pages.reputationcapitalawardspositioning', compact('data'));
    }

    public function reportswhitepapers()
    {
        return view('frontend.pages.reportswhitepapers');
    }

    public function regionalimpactcommunication()
    {
        $data = [];
        $data['title'] = "REGIONAL IMPACT COMMUNICATION";
		$data['description'] = "Real trust is built locally. Regional communication aligns brands with local priorities, media, language, and audience perception to deepen connection.";
		$data['keywords'] = "pr firms near me, top pr firms, pr agency near me, best pr agency in delhi ncr, pr agency in new delhi, pr agency in noida, top pr agency in noida, celebrity pr agency in mumbai";
        return view('frontend.pages.regionalimpactcommunication', compact('data'));
    }

    public function sports()
    {
        return view('frontend.pages.sports');
    }

    public function projectenquiries()
    {
        return view('frontend.pages.projectenquiries');
    }

    public function policyadvocacy()
    {
        return view('frontend.pages.policyadvocacy');
    }

    public function podcastingservices()
    {
        return view('frontend.pages.podcastingservices');
    }

    public function partnershipscontact()
    {
        return view('frontend.pages.partnershipscontact');
    }

    public function officelocations()
    {
        return view('frontend.pages.officelocations');
    }

    public function methodology()
    {
        return view('frontend.pages.methodology');
    }

    public function mediapresscontact()
    {
        return view('frontend.pages.mediapresscontact');
    }

    public function luxurybrands()
    {
        return view('frontend.pages.luxurybrands');
    }

    public function localisedmediastrategy()
    {
        return view('frontend.pages.localisedmediastrategy');
    }

    public function linkedinauthoritybuilding()
    {
        $data = [];
        $data['title'] = "LinkedIn Authority Building";
		$data['description'] = "We help founders and leaders build a credible, consistent LinkedIn presence that boosts authority, attracts the right audience, and drives growth.";
		$data['keywords'] = "financial services pr firms, financial pr agency, best pr companies, social media pr agency, pr agency for individuals, pr consultant near me, best pr agency in delhi ncr, best pr company in noida
pr professionals gurgaon, pr companies in mumbai";
        return view('frontend.pages.linkedinauthoritybuilding', compact('data'));
    }

    public function clientportallogin()
    {
        return view('frontend.pages.clientportallogin');
    }

    public function leadershipmediatraining()
    {
        $data = [];
        $data['title'] = "Leadership Media Training";
		$data['description'] = "We help founders and leaders communicate with clarity and credibility across interviews, panels, podcasts, and high-stakes media moments.";
		$data['keywords'] = "best pr companies, social media pr agency, pr agency for individuals, pr consultant near me, best pr agency in delhi ncr, best pr company in noida, pr professionals gurgaon, pr companies in mumbai";
        return view('frontend.pages.leadershipmediatraining', compact('data'));
    }

    public function leadership()
    {
        return view('frontend.pages.leadership');
    }

    public function investorvisibility()
    {   
        $data = [];
        $data['title'] = "Capital Markets Presence & Stakeholder Confidence";
		$data['description'] = "Strategic media isn’t random press—it’s placing your voice where it matters most: before customers, investors, partners, and key decision-makers.";
		$data['keywords'] = "pr agency near me, press release agency, pr companies near me, best pr agencies, digital pr agency in delhi ncr, pr companies in delhi ncr, pr firms in delhi ncr";
        return view('frontend.pages.investorvisibility', compact('data'));
    }

    public function infrastructureenergy()
    {
        return view('frontend.pages.infrastructureenergy');
    }

    public function enterprisetechsaas()
    {
        return view('frontend.pages.enterprisetechsaas');
    }

    public function healthwellness()
    {
        return view('frontend.pages.healthwellness');
    }

    public function educationedtech()
    {
        return view('frontend.pages.educationedtech');
    }

    public function executiveinfluencemediaauthority()
    {
        $data = [];
        $data['title'] = "influencer marketing agency | Integrated PR";
		$data['description'] = "Visibility alone doesn’t build influence; the right audience must see, understand, and trust your brand for it to truly matter.";
		$data['keywords'] = "influencer marketing agency, best influencer marketing platform, social media influencer agency,
pr agency near me, pr agency for small business, fashion pr agency, digital pr agency";
        return view('frontend.pages.executiveinfluencemediaauthority', compact('data'));
    }

    public function influencecoaching()
    {
        return view('frontend.pages.influencecoaching');
    }

    public function digitalpresencethoughtleadership()
    {
        $data = [];
        $data['title'] = "Build a Digital Presence | Digital Marketing near me";
		$data['description'] = "Your digital presence should do more than exist—it should reflect your values, mindset, and build trust in your leadership clearly.";
		$data['keywords'] = "digital marketing services, marketing agency near me, digital marketing near me, digital marketing agency near me";
        return view('frontend.pages.digitalpresencethoughtleadership', compact('data'));
    }

    public function cxopresenceindustryvisibility()
    {
        $data = [];
        $data['title'] = "CXO PRESENCE & INDUSTRY VISIBILITY";
		$data['description'] = "This is not about attending more events. It is about being visible where influence is built.";
		$data['keywords'] = "pr agency near me, press release agency, pr companies near me, best pr agencies, digital pr agency in delhi ncr, pr companies in delhi ncr, pr firms in delhi ncr";
        return view('frontend.pages.cxopresenceindustryvisibility', compact('data'));
    }
}
