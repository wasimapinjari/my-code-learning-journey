function whoIsBuyingLunchToday( names ) {
   return names[Math.floor(Math.random() * names.length)] + " is going to buy our lunch today, Woo Hoo!";
}

whoIsBuyingLunchToday( ["Wasim", "Alex", "Alisha"] ); // Output: 'Wasim is going to buy our lunch today, Woo Hoo!'
