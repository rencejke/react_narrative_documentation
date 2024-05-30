import React from 'react';
import { StoreContext } from '../../../../../../../store/StoreContext';
import useQueryData from '../../../../../../custom-hook/useQueryData';
import UIHeader from '../partials/UIHeader';
import UINavigation from '../../../partials/UINavigation';
import UIFooter from '../../../partials/UIFooter';
import WeeksMain from './WeeksMain';


const UIWeeks = () => {
  const { store, dispatch } = React.useContext(StoreContext);
  const [info, setInfo] = React.useState(null);

  const {
    isLoading,
    isFetching,
    error,
    data: weeks,
  } = useQueryData(
    "/v1/weeks",
    "get", // method
    "weeks", // key
  );

  return (
    <>
      <UIHeader />
      <div className="flex">
        <UINavigation />
        <WeeksMain isLoading={isLoading} isFetching={isFetching} weeks={weeks} />
      </div>
      <UIFooter />
    </>
  );
};

export default UIWeeks
