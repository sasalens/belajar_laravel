<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('members') }}" class="btn btn-sm btn-success mb-3">< Kembali</a>
                        <form action="{{ route('members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')


                            <div class="my-3">
                                <label for="kelas" class="form-label">Choose Student</label>
                                <select class="form-select form-control @error('student_name') is-invalid @enderror" aria-label="Default select example" name="student_name" id="student">

                                @forelse ($student_as as $student_a)
                                    <option value="{{ $student_a->id}}" {{ $student_a->id == $member->student_id ? 'selected' : '' }}>
                                    {{ $student_a->name}}
                                     </option>
                                     @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>

                                @endforelse
                                 </select>

                                        <!-- error message untuk title -->
                                @error('student_name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                             </div>

                             <div class="my-3">
                                <label for="kelas" class="form-label">Choose Class</label>
                                <select class="form-select form-control @error('classroom') is-invalid @enderror" aria-label="Default select example" name="classroom" id="classroom">

                                @forelse ($classrooms as $classroom)
                                    <option value="{{ $classroom->id}}" {{ $classroom->id == $member->classroom_id ? 'selected' : '' }}>
                                    {{ $classroom->name}}
                                     </option>
                                     @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>

                                @endforelse
                                 </select>
                                        <!-- error message untuk title -->
                                @error('classroom')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                             </div>

                             <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            <button type="reset" class="btn btn-sm btn-warning">Reset</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>