function fibonacciSequence( number ) {
   var stack = [];
   if ( number === 1 ) {
    stack.push( 0 );
   } else if ( number  === 2 ) {
      stack.push( 0, 1 );
   } else if ( number > 2 ) {
      stack.push( 0, 1);
      for( var i = 2; i < number; i++ ) {
         stack.push( stack[ i - 2 ] + stack[ i - 1 ] );
      }     
   }
   return stack;
}
fibonacciSequence( 12 ); // output: (12) [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89]
