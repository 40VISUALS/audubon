<!DOCTYPE html>
<body>
    <h1><u>All Sightings Reported To The Audubon Society</u></h1>

    @forelse($allSightings as $sighting)
        <h2>{{$sighting->getSpecies()}} : {{$sighting->getDescription()}}</h2>
    @empty
        <h2>Sorry, there has been no bird sightings submitted!</h2>
    @endforelse
</body>
