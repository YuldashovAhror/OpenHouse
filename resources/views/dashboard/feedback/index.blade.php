@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Обратная связь</h3>
</div>
{{-- @dd($projects) --}}

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Список</h5>
                </div>
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                            
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название </th>
                                <th scope="col">Телефон</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($feedback) --}}
                            <?php
                            $num = 1;
                            ?>
                            @foreach ($feedbacks as $feedback)
                                <tr>
                                    <th scope="row">{{$num++}}</th>
                                    <td>{{$feedback->first_name}}</td>
                                    <td>{{$feedback->phone}}</td>
                                    <td>
                                            <button class="btn btn-xs btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{$feedback->id}}" data-bs-original-title="" title="">Удалить<i data-feather="trash-2"></i></button>
                                    </td>
                                    <div class="modal fade" id="exampleModalCenter{{$feedback->id}}" tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Rostan ham o'chirmoqchimisiz</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                                {{-- </div> --}}
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Закрывать</button>
                                                <form action="{{route('feedback.destroy', $feedback->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" type="submit"  data-bs-original-title="" title="">Удалить</button>
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection