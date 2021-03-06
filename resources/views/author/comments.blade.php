@extends('layouts.admin')

@section('title') Author Comments @endsection

@section('content')
   <div class="content">
    <div class="card">
        <div class="card-header bg-light">
            Author Comments
        </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Post</th>
                    <th>Content</th>
                    <th>Created at</th>
                    
                </tr>
                </thead>
                <tbody>
                @foreach(Auth::user()->comments as $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                    <td class="text-nowrap"><a href="{{route('singlePost', $comment->id)}}">{{$comment->post_id}}</a></td>
                        <td>{{$comment->content}}</td>
                    <td>{{\Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</td>
                        
                    </tr>
                @endforeach
            
                </tbody>
            </table>
        </div>
    </div>
   </div>

   @foreach($comments as $comment)
      
   <div class="modal fade" id="deleteCommentModal-{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
       <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">You are about to delete comment for post {{$comment->post_id}}.</h5>
        </div>
        <div class="modal-body">
          Are you sure?
        </div>
        <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">No, keep it.</button>
          <form method="POST"  id="deleteComment-{{$comment->id}}" action="{{route('adminDeleteComment', $comment->id)}}">@csrf
             <button type="submit" class="btn btn-primary">Yes, delete it </button>
         </form>
        </div>
      </div>
    </div>
  </div>

@endforeach


@endsection
