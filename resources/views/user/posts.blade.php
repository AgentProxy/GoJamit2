@extends('user.profile')
@section('details')

@forelse($posts as $post)
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default" id="post-{{$post->id}}">
        <div class="panel-heading">

             <a href="#" id="delete" class="btn btn-danger pull-right" data-toggle="modal" data-target="#delete-confirm-{{$post->id}}">Delete Post</a>

            <a href="profile/{{$user->username}}/about" >{{  $user->username  }}</a>
            <!-- <a id="delete-post" href="javascript:void(0)" data-pg="{{ $post->id }}" class="pull-right btn btn-danger"> Delete Post </button>  -->
        </div>

        <div class="panel-body">
            <div>
                  {{ $post->content }}  
            </div>
            <div>
            @if($post->filename!='0') 

                <audio controls>
                  <!-- <source src="horse.ogg" type="audio/ogg"> -->
                  <source src="/user-audios/{{$post->filename}}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            @endif

            @if($post->user_id == $user->id)

            @endif
            </div>
        </div>
        <div class="panel-footer clearfix" style="background-color: #fff;">
            <a href="#" class="pull-right"> Like </a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="delete-confirm-{{$post->id}}" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Post</h4>
            </div>
            <div class="modal-body">
                <p>
                    Do you really want to delete this post? 
                </p>
            </div>
            <div class="modal-footer">
                <p> {{$post->id}} </p>
                <a id="delete-post" href="javascript:void(0)" data-pg="{{ $post->id }}" class="delete-post btn btn-danger" data-dismiss="modal"> Delete Post </a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>

    </div>
</div>
<!--  END OF MODAL -->

@empty
    No Posts
@endforelse

@endsection