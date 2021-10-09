const { expect } = require("chai");
const chai = require("chai");
const espect = chai.expect;
const sabre = require('../lib/sabre')

describe("cores dos sabras de luz", () => {
    it("deve ativar a cor verde", () => {
        expect(sabre.corAtivada("Yoda")).to.equal("Verde")
    });
    it("Deve ativar a cor roxo", () => {
        expect(sabre.corAtivada("Mace Windu")).to.equal("Roxo")
    })
    it("Deve retornar mensagem de nome invalido", () => {
        expect(sabre.corAtivada("")).to.equal("Nome invalido")
    })
});