<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\University;
use Log;
use Auth;
use Image;
use Validator;
use App\Models\Event;
use App\Models\Organiser;
use App\Models\EventImage;
use Illuminate\Http\Request;

class UniversityController extends MyBaseController
{
    /**
     * Show the 'Create Event' Modal
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function showCreateUniversity(Request $request)
    {
        $data = [
            'modal_id' => $request->get('modal_id'),
            'organisers' => Organiser::scope()->pluck('name', 'id'),
            'organiser_id' => $request->get('organiser_id') ? $request->get('organiser_id') : false,
        ];

        return view('ManageOrganiser.Modals.CreateUniversity', $data);
    }

    /**
     * Create an event
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postCreateUniversity(Request $request)
    {
        $University = University::createNew();

        if (!$University->validate($request->all())) {
            return response()->json([
                'status' => 'error',
                'messages' => $University->errors(),
            ]);
        }

        $University->name = $request->get('name');
        $University->domain = $request->get('domain');

        if ($request->get('organiser_id')) {
            $University->organiser_id = $request->get('organiser_id');
        } else {
            /* Somethings gone horribly wrong */
            return response()->json([
                'status' => 'error',
                'messages' => trans("Controllers.organiser_other_error"),
            ]);
        }
        try {
            $University->save();
        } catch (\Exception $e) {
            Log::error($e);

            return response()->json([
                'status' => 'error',
                'messages' => trans("Controllers.event_create_exception"),
            ]);
        }


        return response()->json([
            'status' => 'success',
            'id' => $University->id,
            'redirectUrl' => route('showOrganiserUniversities', [
                'organiser_id' =>   $University->organiser_id,
                'first_run' => 'yup',
            ]),
        ]);
    }

    public function showUpdateUniversity ($university_id)
    {
        $data = [
            'university'  => University::scope()->find($university_id),
            ];
        return view('ManageOrganiser.Modals.editUniversity', $data);
    }


    /**
     * Edit an event
     *
     * @param Request $request
     * @param $University_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function postUpdateUniversity(Request $request, $University_id)
    {
        $University = University::scope()->findOrFail($University_id);

        if (!$University->validate($request->all())) {
            return response()->json([
                'status' => 'error',
                'messages' => $University->errors(),
            ]);
        }



        $University->name = $request->get('name');
        $University->domain = $request->get('domain');
        $University->save();

        return response()->json([
            'status' => 'success',
            'id' => $University->id,
            'message' => trans("Controllers.event_successfully_updated"),
            'redirectUrl' => '',
        ]);
    }

}
