// Type definitions for ag-grid v7.0.2
// Project: http://www.ag-grid.com/
// Definitions by: Niall Crosby <https://github.com/ceolter/>
import { Column } from "./column";
import { GridRow } from "./gridRow";
export declare class GridCell {
    floating: string;
    rowIndex: number;
    column: Column;
    constructor(rowIndex: number, floating: string, column: Column);
    getGridRow(): GridRow;
    toString(): string;
    createId(): string;
}
