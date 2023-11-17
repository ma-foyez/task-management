@extends('layouts.layout')

@section('content')
    <div>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">
                        <label for="assign_to" class="form-label">Assign To</label>
                        <select name="assign_to" id="assign_to" class="form-control" required>
                            <option value="" disabled selected>Select Partner</option>
                            <option value="Fayez">Fayez</option>
                            <option value="Noman">Noman</option>
                            <option value="Rakib">Rakib</option>
                            <option value="Urmi Rahman">Urmi Rahman</option>
                            <option value="Biplob">Biplob</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="title" class="form-label">Task Title</label>
                        <input type="text" class="form-control" placeholder="FEAT: Foldering Structure" id="title"
                            name="title" required>
                    </div>
                    <div class="mb-2">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="" disabled selected>Select Status</option>
                            <option value="Pending">Pending</option>
                            <option value="In Progress">In Progress</option>
                            <option value="In Testing">In Testing</option>
                            <option value="In Review">In Review</option>
                            <option value="Done">Done</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="estimated_time" class="form-label">Estimated Time</label>
                        <input type="date" class="form-control" id="estimated_time" name="estimated_time" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-2">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
