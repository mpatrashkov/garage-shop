@extends('layouts.main')

@section('content')
    <div class="container products">
        <form class="products--search">
            <input class="input input__large" placeholder="Търси у сайта">
            <button>
                <span class="material-icons">search</span>
            </button>
        </form>

        <div class="products--page">
            {{-- <button class="products--filtersButton btn btn__secondary">
                Филтри
            </button> --}}
            <div class="products--filters">
                <div class="products--filters-sticky">
                    <form>
                        <ul class="products--list">
                            <li class="products--list-item">
                                <div class="products--list-item-title">
                                    Категория
                                </div>
                                <ul class="products--nestedList">
                                    @foreach ($categories as $category)
                                        <li class="products--nestedList-item @if($category->name === $currentCategory) products--nestedList-item__active @endif">
                                            <a href="{{ route('products', $category->name) }}">
                                                {{ $category->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="products--list-item">
                                <div class="products--list-item-title">
                                    Цена
                                </div>
                                
                                <price-slider 
                                    :min="{{ $price["min"] }}" 
                                    :max="{{ $price["max"] }}" 
                                    :min-value="{{ $price["minValue"] }}" 
                                    :max-value="{{ $price["maxValue"] }}">
                                </price-slider>
                            </li>
                        </ul>
                        <div class="products--form-buttons">
                            <button class="btn btn__primary">Филтър</button>
                            <a href="{{ route('products', $currentCategory) }}">
                                <button type="button" class="btn btn__secondary">Изчисти</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            @if (count($products) > 0)
                <div class="products--itemsWrapper">
                    <div class="products--items">
                        @foreach ($products as $product)
                            <div class="products--item">
                                <x-product :product="$product"></x-product>
                            </div>
                        @endforeach 

                    </div>
                    <div class="products--pagination">
                        {{ $products->links() }}
                    </div>
                </div>
            @else
                <i class="products--noItems">
                    Няма резултати
                </i>
            @endif
        </div>
    </div>
@endsection