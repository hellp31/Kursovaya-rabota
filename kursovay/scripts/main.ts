import { Component, OnInit } from '@angular/core';
import { Image } from 'src/app/models/image.model';

@Component({
  selector: 'app-slider',
  templateUrl: './slider.component.html',
  styleUrls: ['./slider.component.css']
})
export class SliderComponent implements OnInit {
  images: Image[] = [
    new Image('https://picsum.photos/id/1008/200/300', 'Image 1'),
    new Image('https://picsum.photos/id/1013/200/300', 'Image 2'),
    new Image('https://picsum.photos/id/1023/200/300', 'Image 3'),
    new Image('https://picsum.photos/id/1033/200/300', 'Image 4'),
  ];
  currentImageIndex = 0;

  ngOnInit(): void {
  }

  nextImage(): void {
    this.currentImageIndex = (this.currentImageIndex + 1) % this.images.length;
  }

  previousImage(): void {
    if (this.currentImageIndex === 0) {
      this.currentImageIndex = this.images.length - 1;
    } else {
      this.currentImageIndex--;
    }
  }
}