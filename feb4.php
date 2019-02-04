<?php

/**converts the string into an array and filters out any words that begin with the letter f**/


const wiseWords = ["Fate protects fools, little children and ships named Enterprise.
					You're going to be an interesting companion, Mr. Data. Some days you get the
					bear, and some days the bear gets you. Maybe if we felt any human loss as
					keenly as we feel one of those close to us, human history would be far less
					bloody. Why don't we just give everybody a promotion and call it a night -
					'Commander'? Well, that's certainly good to know. Mr. Worf, you do remember
					how to fire phasers? A lot of things can change in twelve years, Admiral."];

var effWords = (["fate", "fools", "feel", "far", "fire"]);

const mapped = wiseWords.map(val => effwords.has(val) ? "effWords" : val);
console.log(mapped);