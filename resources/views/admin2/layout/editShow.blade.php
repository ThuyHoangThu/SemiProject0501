@extends('admin2.layout.index')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Show</h4>
                <p class="card-description">Update Show</p>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="show_id"> ID </label>
                        <input type="text" class="form-control" id="show_id" placeholder=" ID Show">
                    </div>
                    <div class="form-group">
                        <label for="m_id"> ID Movie </label>
                        <input type="text" class="form-control" id="m_id" placeholder="ID Movie">
                    </div>
                    <div class="form-group">
                        <label for="stt_time"> Start Time </label>
                        <input class="form-control" type="time" id="stt_time" name="stt_time">
                    </div>
                    <div class="form-group">
                        <label for="end_time"> End Time </label>
                        <input class="form-control" type="time" id="end_time" name="end_time" required>
                    </div>
                    <div class="form-group">
                        <label for="birthday">Show Date </label>
                        <input class="form-control" type="date" id="showdate" name="showdate">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
