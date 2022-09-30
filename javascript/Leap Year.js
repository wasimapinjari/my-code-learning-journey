function leapYear( year ) {
   if ( year % 4 === 0 ) {
      if ( year % 100 === 0 ) {
         if ( year % 400 === 0) {
            return year +  " is a Leap Year";
         } else {
            return year +  " is not a Leap Year";
         }
      } else {
         return year +  " is a Leap Year";
      }
   } else {
      return year +  " is not a Leap Year";
   }
}

leapYear( 2024 ); // Output: '2024 is a Leap Year'
