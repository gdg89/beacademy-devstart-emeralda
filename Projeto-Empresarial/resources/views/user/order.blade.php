@extends('layouts.default')
@section('title', 'Informações do Usuário')

@section('content')

<section class="section-container">

    <div class="flex items-start justify-between">

        <div class="flex items-center mb-2">
            <h1 class="text-2xl md:text-3xl font-medium title-font text-gray-900">
                Pedido #{{ $order->id }}
            </h1>

            <div class="ml-2">
                @include('shared.status.badge')
            </div>

        </div>

        <a href="{{ route('user.show', $user->id) }}" class="btn-primary">
            Voltar
        </a>
    </div>

    <span class="block mb-8 text-sm">
        Criado em {{ $order->created_at->format('d/m/Y - H:i:s') }}
    </span>

    <div class="flex flex-col gap-4">

        <p>
            <strong class="uppercase">Quantidade:</strong>
            <span>{{ $order->quantity }}</span>
        </p>

        <p>
            <strong class="uppercase">Total:</strong>
            <span>R$ {{ $order->total }}</span>
        </p>

    </div>


    <div class="mt-12 w-full mx-auto overflow-auto">
        <h1 class="title mb-8">
            Produtos
        </h1>

        <table class="table-auto w-full text-left whitespace-no-wrap">
            <thead>
                <tr>
                    <th class="table-th">
                        #
                    </th>
                    <th class="table-th">
                        Imagem
                    </th>
                    <th class="table-th text-center">
                        Qtd
                    </th>
                    <th class="table-th">
                        Nome
                    </th>

                    <th class="table-th text-center">
                        TOTAL (R$)
                    </th>

                </tr>
            </thead>
            <tbody class="divide-y">

                @foreach ($order->uniqueProducts as $product)
                <tr class="table-tr">
                    <td class="px-4 py-3">{{ $product->id }}</td>
                    <td class="px-4 py-3">
                        <img alt="{{ $product->name }}" class="object-cover object-center w-full h-[80px] block"
                            src="{{ $product->cover }}" style="width: 150px; min-width: 150px;" />
                    </td>
                    <td class="text-center px-4 py-3">{{ $product->quantity }}</td>
                    <td class="px-4 py-3">{{ $product->name }}</td>
                    <td class="text-center px-4 py-3">{{ $product->total }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</section>
@endsection
