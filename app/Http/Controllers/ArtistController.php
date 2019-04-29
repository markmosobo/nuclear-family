<?php

namespace App\Http\Controllers;

use App\DataTables\ArtistDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use App\Repositories\ArtistRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ArtistController extends AppBaseController
{
    /** @var  ArtistRepository */
    private $artistRepository;

    public function __construct(ArtistRepository $artistRepo)
    {
        $this->artistRepository = $artistRepo;
    }

    /**
     * Display a listing of the Artist.
     *
     * @param ArtistDataTable $artistDataTable
     * @return Response
     */
    public function index(ArtistDataTable $artistDataTable)
    {
        return $artistDataTable->render('artists.index');
    }

    /**
     * Show the form for creating a new Artist.
     *
     * @return Response
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created Artist in storage.
     *
     * @param CreateArtistRequest $request
     *
     * @return Response
     */
    public function store(CreateArtistRequest $request)
    {
        $input = $request->all();

        $artist = $this->artistRepository->create($input);

        Flash::success('Artist saved successfully.');

        return redirect(route('artists.index'));
    }

    /**
     * Display the specified Artist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $artist = $this->artistRepository->findWithoutFail($id);

        if (empty($artist)) {
            Flash::error('Artist not found');

            return redirect(route('artists.index'));
        }

        return view('artists.show')->with('artist', $artist);
    }

    /**
     * Show the form for editing the specified Artist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $artist = $this->artistRepository->findWithoutFail($id);

        if (empty($artist)) {
            Flash::error('Artist not found');

            return redirect(route('artists.index'));
        }

        return view('artists.edit')->with('artist', $artist);
    }

    /**
     * Update the specified Artist in storage.
     *
     * @param  int              $id
     * @param UpdateArtistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArtistRequest $request)
    {
        $artist = $this->artistRepository->findWithoutFail($id);

        if (empty($artist)) {
            Flash::error('Artist not found');

            return redirect(route('artists.index'));
        }

        $artist = $this->artistRepository->update($request->all(), $id);

        Flash::success('Artist updated successfully.');

        return redirect(route('artists.index'));
    }

    /**
     * Remove the specified Artist from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $artist = $this->artistRepository->findWithoutFail($id);

        if (empty($artist)) {
            Flash::error('Artist not found');

            return redirect(route('artists.index'));
        }

        $this->artistRepository->delete($id);

        Flash::success('Artist deleted successfully.');

        return redirect(route('artists.index'));
    }
}
