<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PrepareNoticeRequest;
use App\Provider;
use App\Notice;
use Auth;
use Mail;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class NoticesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');

        parent::__construct();
    }
    /**
     * Show all notices
     */
	public function index()
    {
        $notices = $this->user->notices;

        return view('notices.index',compact('notices'));
    }

    /**
     * Show a page to create a new notice
     */

    public function create()
    {
        // get list of providers
        $providers = Provider::lists('name','id');

        return view('notices.create',compact('providers'));
    }

    public function confirm(PrepareNoticeRequest $request)
    {
        $template = $this->compileDmcaTemplate($data = $request->all());

        session()->flash('dmca',$data);

        return view('notices.confirm',compact('template'));
    }

    /**
     * Store a new dmca notice.
     * @param Request $request
     *
     */
    public function store(Request $request)
    {
        $notice = $this->craeteNotice($request);

        Mail::queue(['text' => 'emails.dmca'],compact('notice'),function($message) use ($notice){
            $message->from($notice->getOwnerEmail())
                ->to($notice->getRecipientEmail())
                ->subject('DMCA notice');
        });

        flash('Your DMCA notice has been delivered!');

        return redirect('notices');

    }

    public function update($noticeId,Request $request)
    {
        $isRemoved = $request->has('content_removed');
        Notice::findOrFail($noticeId)
            ->update(['content_removed'=>$isRemoved]);

    }

    public function compileDmcaTemplate($data)
    {
        $data = $data+[
            'name' => $this->user->name,
            'email' => $this->user->email,
        ];
        $template = view()->file(app_path('Http/Templates/dmca.blade.php'),$data);

        return $template;
    }

    /**
     * Create and persist a new DMCA notice.
     * @param Request $request
     */
    public function craeteNotice(Request $request)
    {
        $notice = session()->get('dmca') + ['template' => $request->input('template')];

        //$notice = Notice::open($data)->useTemplate($request->input('template'));

        $notice = $this->user->notices()->create($notice);

        return $notice;
    }


}
