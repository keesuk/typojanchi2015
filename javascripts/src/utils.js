Number.prototype.number_with_delimiter = function(delimiter) {
    var number = this + '', delimiter = delimiter || ',';
    var split = number.split('.');
    split[0] = split[0].replace(
        /(\d)(?=(\d\d\d)+(?!\d))/g,
        '$1' + delimiter
    );
    return split.join('.');    
};

Math.radians = function(degrees) {
  return degrees * Math.PI / 180;
};
 
// Converts from radians to degrees.
Math.degrees = function(radians) {
  return radians * 180 / Math.PI;
};
function constrain(v, min, max){
  if( v < min )
    v = min;
  else
  if( v > max )
    v = max;
  return v;
}

function text_color (bgColor) {
  var r = bgColor[0],
      g = bgColor[1],
      b = bgColor[2];
  var yiq = (r * 299 + g * 587 + b * 114) / 1000;
  return (yiq >= 128) ? 'black' : 'white';
}


function brighten_color(hex) {
      
  var before_color = chroma.hex(hex);
  var hue = before_color.hsv()[0]

  if (_.isNaN(hue)) { hue = 0; }

  var return_color = chroma.hsv(hue, Math.max(before_color.hsv()[1], 0.8), Math.max(before_color.hsv()[2], 0.8));

  return return_color.hex();
}


function normalize(num){
    

  var scalar = Math.sqrt( num * num );
  if ( scalar !== 0 ) {

    var invScalar = 1 / scalar;

    num *= invScalar;
    
  } else {

    num = 0;
    
  }

  return num;

}

function map(value, start1,  stop1, start2,  stop2) {
  return start2 + (stop2 - start2) * ((value - start1) / (stop1 - start1));
}

function randomBetween(low, high) {
  if (low >= high) return low;
  var diff = high - low;
  return Math.random() * diff + low;
}
