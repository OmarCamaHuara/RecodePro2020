import { clickReducer } from './clickReducer';
import { combineReducer } from 'redux';

export const Reducers = combineReducer({
    clickState: clickReducer
})