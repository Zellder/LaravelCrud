@for($i=0; $i < count($array);  $i++)
<p>o valor no index [{{$i}}] é :{{$array[$i]}}</p>
@endfor
<p>o Valor minimo do array é :{{$min}}</p>
<p>e o Valor máximo é :{{$max}}</p>
<a href="/">voltar para home<a>
