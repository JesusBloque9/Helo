const firstSequenceImages = [];
const twoSequenceImages = [];
const treeSequenceImages = [];
const fourSequenceImages = [];
const fiveSequenceImages = [];
const sixSequenceImages = [];


for (let i = 46; i <= 124; i ++) {//126
  firstSequenceImages.push(`${`00${i}`.slice(-5)}.jpg`);
}

for (let i = 1136; i <= 1182; i ++) {//1182
  twoSequenceImages.push(`${`000${i}`.slice(-6)}.jpg`);
}

for (let i = 435; i <= 484; i ++) {
  treeSequenceImages.push(`${`000${i}`.slice(-5)}.jpg`);
}

for (let i = 742; i <= 785; i ++) {
  fourSequenceImages.push(`${`000${i}`.slice(-5)}.jpg`);
}

for (let i = 1606; i <= 1650; i ++) {
  fiveSequenceImages.push(`${`000${i}`.slice(-6)}.jpg`);
}

for (let i = 814; i <= 847; i ++) {
  sixSequenceImages.push(`${`000${i}`.slice(-5)}.jpg`);
}




const firstSequence = new ScrollSequence({
    container: '.first-sequence',
    scrollWith: '.first-container',
    images: firstSequenceImages,
    imagesRoot: 'resources/img/secuencia/1/',
    priorityFrames: [0, 20, 40, 60, 90],
    cover: true,
    starts: 'out',
    ends: 'in'
  });

  const twoSequence = new ScrollSequence({
    container: '.two-sequence',
    scrollWith: '.two-container',
    images: twoSequenceImages,
    imagesRoot: 'resources/img/secuencia/1/',
    priorityFrames: [0, 20, 40, 60, 90],
    cover: true,
    starts: 'out',
    ends: 'in'
  });
  
  const treeSequence = new ScrollSequence({
    container: '.tree-sequence',
    scrollWith: '.tree-container',
    images: treeSequenceImages,
    imagesRoot: 'resources/img/secuencia/1/',
    priorityFrames: [0, 20, 40, 60, 90],
    cover: true,
    starts: 'out',
    ends: 'in'
  });

  const fourSequence = new ScrollSequence({
    container: '.four-sequence',
    scrollWith: '.four-container',
    images: fourSequenceImages,
    imagesRoot: 'resources/img/secuencia/1/',
    priorityFrames: [0, 20, 40, 60, 90],
    cover: true,
    starts: 'out',
    ends: 'in'
  });

  const fiveSequence = new ScrollSequence({
    container: '.five-sequence',
    scrollWith: '.five-container',
    images: fiveSequenceImages,
    imagesRoot: 'resources/img/secuencia/1/',
    priorityFrames: [0, 20, 40, 60, 90],
    cover: true,
    starts: 'out',
    ends: 'in'
  });

  const sixSequence = new ScrollSequence({
    container: '.six-sequence',
    scrollWith: '.six-container',
    images: sixSequenceImages,
    imagesRoot: 'resources/img/secuencia/1/',
    priorityFrames: [0, 20, 40, 60, 90],
    cover: true,
    starts: 'out',
    ends: 'in'
  });
  
  
  // END SCROLL_SEQUENCE CODE
  
  ScrollOut({
    targets: '.speak',
    cssProps: {
      viewportY: true,
      visibleY: true
    }
  });