<?php

namespace App\Http\Controllers;

use App\DataTables\EventDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\EventCategory;
use App\Repositories\EventRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EventController extends AppBaseController
{
    /** @var  EventRepository */
    private $eventRepository;

    public function __construct(EventRepository $eventRepo)
    {
        $this->eventRepository = $eventRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Event.
     *
     * @param EventDataTable $eventDataTable
     * @return Response
     */
    public function index(EventDataTable $eventDataTable)
    {
        return $eventDataTable->render('events.index',[
            'categories'=>EventCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new Event.
     *
     * @return Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created Event in storage.
     *
     * @param CreateEventRequest $request
     *
     * @return Response
     */
    public function store(CreateEventRequest $request)
    {
        $input = $request->all();

        $event = $this->eventRepository->create($input);

        Flash::success('Event saved successfully.');

        return redirect(route('events.index'));
    }

    /**
     * Display the specified Event.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        return response()->json($event);
    }

    /**
     * Show the form for editing the specified Event.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        return view('events.edit')->with('event', $event);
    }

    /**
     * Update the specified Event in storage.
     *
     * @param  int              $id
     * @param UpdateEventRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventRequest $request)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        $event = $this->eventRepository->update($request->all(), $id);

        Flash::success('Event updated successfully.');

        return redirect(route('events.index'));
    }

    /**
     * Remove the specified Event from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        $this->eventRepository->delete($id);

        Flash::success('Event deleted successfully.');

        return redirect(route('events.index'));
    }
}
