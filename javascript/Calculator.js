function add( num1, num2 ) {
   return num1 + num2;
}
function sub( num1, num2 ) {
   return num1 - num2;
}
function mul( num1, num2 ) {
   return num1 * num2;
}
function div( num1, num2 ) {
   return num1 / num2;
}
function mod( num1, num2 ) {
   return num1 % num2;
}
function calculator( num1, num2, operator ){
   return operator( num1, num2 );
}

console.log(calculator( 16, 4, add )); // Output: 20
console.log(calculator( 16, 4, sub )); // Output: 12
console.log(calculator( 16, 4, mul )); // Output: 64 
console.log(calculator( 16, 4, div )); // Output: 4 
console.log(calculator( 16, 4, mod )); // Output: 0
