"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('@angular/core');
var LaunchSpecificity_1 = require("../enums/LaunchSpecificity");
var CountdownComponent = (function () {
    function CountdownComponent() {
    }
    __decorate([
        core_1.Input(), 
        __metadata('design:type', Date)
    ], CountdownComponent.prototype, "countdown", void 0);
    __decorate([
        core_1.Input(), 
        __metadata('design:type', Number)
    ], CountdownComponent.prototype, "specificity", void 0);
    __decorate([
        core_1.Input(), 
        __metadata('design:type', String)
    ], CountdownComponent.prototype, "type", void 0);
    __decorate([
        core_1.Input(), 
        __metadata('design:type', Boolean)
    ], CountdownComponent.prototype, "isPaused", void 0);
    __decorate([
        core_1.Input(), 
        __metadata('design:type', Boolean)
    ], CountdownComponent.prototype, "isVisibleWhenPaused", void 0);
    __decorate([
        core_1.Input(), 
        __metadata('design:type', Function)
    ], CountdownComponent.prototype, "callback", void 0);
    CountdownComponent = __decorate([
        core_1.Component({
            selector: 'countdown',
            templateUrl: 'js/angular2/templates/countdown.component.html'
        }), 
        __metadata('design:paramtypes', [])
    ], CountdownComponent);
    return CountdownComponent;
}());
exports.CountdownComponent = CountdownComponent;