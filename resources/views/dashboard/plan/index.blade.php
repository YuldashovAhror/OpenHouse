@extends('layouts.dashboard.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Все новости</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Фото</th>
                            <th scope="col">Заголовок</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Размер</th>
                            <th scope="col">Цена</th>
                            <th scope="col" class="text-center">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($k=1)
                        @foreach($plans as $plan)
                            <tr>
                                <th scope="row">{{ $k }}</th>
                                <td><img src="{{ $plan->photo }}" alt="" style="height: 100px; width: 200px"></td>
                                <td>{{ $plan->name_ru }}</td>
                                <td>{!! $plan->discription_ru !!}</td>
                                <td>{{ $plan->size }}</td>
                                <td>{{ $plan->price }}</td>
                                <td class="text-center">
                                    <a href="{{ route('plan.edit', $plan) }}">
                                        <button class="btn btn-xs btn-success">
                                            <i class="bx bx-pencil"></i>
                                        </button>
                                    </a>
                                    <button class="btn btn-xs btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{ $plan->id }}"><i class="bx bx-trash"></i></button>
                                    <div class="modal fade" id="exampleModalCenter{{ $plan->id }}" tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Удалить?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('plan.destroy', $plan) }}" method="post">
                                                        @csrf
                                                        {{ method_field('delete') }}
                                                        <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Да</button>
                                                    </form>
                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Нет</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php($k++)
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
